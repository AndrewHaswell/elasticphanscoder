TAG = 1.0.0

default:
	docker image build --tag tgy741/elasticphanscoder:${TAG} --tag tgy741/elasticphanscoder:latest ${CURDIR}
	docker image push tgy741/elasticphanscoder:${TAG}
	docker image push tgy741/elasticphanscoder:latest
