---
title: "Compute the average of a growing set of numbers: Rolling Average"
shortTitle: "Rolling Average"
date: 2023-10-05T13:37:34Z
draft: true
hero: "hero.png"

katex: true
markup: 'mmark'
---

Join on my adventure to figure out how to find the average of all user ratings in a growing dataset. In a project of mine users can give items a score. The average of all of the scores should be displayed in the UI. What is the most efficient way to find this average, without having to recompute everything every time a user votes for something.
<!--more--> 
In my case users can vote on a scale from 1-10 but the algorithms all work on other ranges too. Generally, fi you use a float 0-1 in the formulas, it can be easily and quickly remapped to every other format.

Lets start with the standard formula for an average and try to go from there.

## Standard Average

$$\frac{1+4+2}{3}=2.333333333333333$$


$$\frac{1+4}{3}+\frac{2}{3}=2.333333333333333$$

## Restructuring the formula

$$\frac{1+4+2}{3}=2.333333333333333$$

You can reformat it to only use the old score, number of ratings and new rating.

$$\frac{1+4}{2}*\frac{2}{3}+\frac{2}{3}=2.333333333333334$$

Lets rewrite the numbers as variables

$$\text{old-rating-score}*\frac{\text{old-rating-count}}{\text{new-rating-count}}+\frac{\text{new-incoming-user-rating}}{\text{new-rating-count}}=\text{new-rating-score}$$

Scores will be denoted in floats in the s okame range as the inputted numbers. If you input 1,2,3,4,5/5 you will get an output between 1-5. If you input a float 0-1 the output score will be 0-1. This means scores should be stored 0-1 to make them independent of the users voting-scale.

After more research I found out this is called a “running average“ or “rolling average“.

### Testing

What happens if rating counts go into the thousands of ratings? Is it fast? Is it accurate?
I am going to try to quickly simulate it with a python script.

#### Generating Numbers


{{< highlight py2 "linenos=table" >}}
import random

rating_count = 10

random_ratings = []
for _ in range(rating_count):
    random_number = random.randint(1, 10)
    random_ratings.append(random_number)

print(random_ratings);
{{< / highlight >}}

#### Classic 

{{< highlight py2 "linenos=table" >}}
average = sum(random_ratings) / len(random_ratings)
print("Classic_Solution: ", average);
{{< / highlight >}}

#### Running Average

{{< highlight py2 "linenos=table" >}}
old_rating_score = 0
old_rating_count = 0
new_rating_score = 0

for new_incoming_user_rating in random_ratings:
    new_rating_count = old_rating_count + 1

    new_rating_score = (old_rating_score * old_rating_count / new_rating_count) + (new_incoming_user_rating / new_rating_count)
    old_rating_score = new_rating_score
    old_rating_count = new_rating_count
    
print("Running_Solution:", new_rating_score);
{{< / highlight >}}

#### Runtime Stats

{{< highlight yaml "style=monokai" >}}
Generated_Numbers: 100_000_000
Generation_Time:   55.875450134277344 Seconds

Classic_Solution:  5.49981686
Runtime:           0.4730079174041748 Seconds

Running_Solution:  5.499816859997962
Runtime:           0.0 Seconds # This is only the runtime of one calculations, this will add up when it is done 100_000_000 times but so will the classical soltion.

Absolute_Error:   -2.0383694732117874e-12
Percentage_Error: -3.7062497263077724e-11
{{< / highlight >}}

Recalculating a new rating takes practically no time, and there is no need to get all previous ratings. It could be made more accurate by maintaining all fractions but it has an extremely low error so this is totally usable. 

Turns out the people who work with giant datasets are using the same type of algorithm (“rolling average“), we just figured out. Although way more optimised and not just hacked together like this one (as you will find out shortly), never the less a cool coincidence (:

## I was wrong. New Algorithm, still rolling but less computation and 0% error.

After thinking about the algorithm I think this is way more complicated than it had to be. All I should need to do is keep track of the sum and the count of the votes.

$$\frac{\text{sum}+\text{new-incoming-user-rating}}{\text{new-rating-count}}=\text{new-rating-score}$$

By keeping track of the sum I can just use the normal formula for an average, But most of the calculations were already done previously and stored in sum. So instead of keeping track of the current rating, the system keeps track of the sum and calculates the rating on the fly.