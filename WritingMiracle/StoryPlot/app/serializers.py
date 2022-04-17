from rest_framework import serializers


class SubmitTaskSerializer(serializers.Serializer):
    text = serializers.CharField()


class GetTaskResultSerializer(serializers.Serializer):
    task_id = serializers.CharField()
