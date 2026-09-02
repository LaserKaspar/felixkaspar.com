build:
	hugo --source ./site

dev:
	hugo --source ./site server -D --bind 0.0.0.0
