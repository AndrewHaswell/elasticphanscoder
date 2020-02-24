# Elastic Phanscoder

## About

Elastic Phanscoder is a Docker image for mocking AWS Elastic Transcoder during development.

## Example

```
docker container run --publish 8000:2323 tgy741/elasticphanscoder
```

## Endpoints

* `POST /2012-09-25/jobs`
* `GET /2012-09-25/jobs/3333333333333-abcde3`

There aren't many endpoints, only creating jobs and reading a job are currently supported.

## Author

Written by Tom Yeadon in February 2020.
