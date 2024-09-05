# Its Super! (Buggy)
This repository contains a Symfony-based application with a superhero theme.
The controller and service generate superhero names, powers, and battle cries, but the code has intentional bugs.
Your task is to identify and fix the issues while improving the overall functionality. 
Show your skills in PHP and OOP by firstly fixing the list of known bugs. Should you have time, feel free to improve
the codebase by refactoring or adding new features. Remember, this is a chance to demonstrate your problem-solving skills 
first, and your OOP knowledge second. Don't get bogged down in specifics or new features, fix the bugs first.  
We're looking for code that works first, refactor and improve the code second.

# Application Feature 
This symfony application is the beginnings of a fictional SuperHero API to be used by a mobile app. 

A previous developer has started the project but has since moved on, leaving the project in an unfinished state.

At the moment it provides a single endpoint that returns a specified superhero, their superpower, battle cry,
power level, commit book universe. 

You can access the endpoint by running the following command in your terminal:

```bash
curl http://localhost:8000/super-hero/data
```

# Known Bugs

1. When passing in a hero query string parameter, the application either returns a 500 error or a random hero.
2. The response is meant to return a json object, but at the moment it returns a string representing the data. 
3. When the Vegeta hero is returned the application returns a 500 error.

## Project Structure
The project directory structure is as follows:

```
app/               # Application source code
bin/               # Contains the console commands to help you run the application
docker/            # Contains the docker configuration files
```

# Submission Instructions

1. Clone this repository. 
2. Fix the known bugs.
3. Submit your solution as a pull request to this repository.
4. Include a brief description of the bugs you fixed, the refactorings you made, and any new features you added.
5. Include any instructions on how to run your solution if relevant 
6. The pull request will be reviewed by the team and feedback will be provided.

# Bonus Points
1. Refactor the codebase as you see fit.
2. Add any new features you think would be useful.

## Installation Requirements

Docker and Docker Compose are required to run this project. If you don't have them installed, you can download them from the following links:

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)


## Running the Project

To run the project, you need to execute the following commands:

```bash
docker-compose up --build -d
```

After running the command, you can access the project at the following URL: [http://localhost:8000](http://localhost:8000)

You should see the default Symfony welcome page.

You may need to wait a small while for the application to finish downloading and installing requirements. 

You can inspect the application container to see if it's ready by running the following command:

```bash
docker-compose logs -f app
```

This will show you the logs of the application container. You should see a message like the following when the application is ready:

```
app-1  | [05-Sep-2024 19:57:00] NOTICE: ready to handle connections
```

## Helpful Commands

To save time, you can run the following command to boot the application and automatically open in your default browser
when its ready: 

```bash
bin/boot
```

