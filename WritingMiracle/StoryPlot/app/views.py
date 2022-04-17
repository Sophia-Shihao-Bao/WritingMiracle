from django.shortcuts import render
from django.views.generic import TemplateView
from rest_framework.views import APIView
from rest_framework.response import Response

from .serializers import SubmitTaskSerializer, GetTaskResultSerializer
from .utils import submit_task, get_task_result

# Create your views here.


class SubmitTaskAPIView(APIView):
    def post(self, request, *args, **kwargs):
        ser = SubmitTaskSerializer(data=request.data)
        if ser.is_valid():
            task_id = submit_task(ser.validated_data['text'])
            return Response(task_id)
        return Response(data=ser.errors)


class GetResultAPIView(APIView):
    def get(self, request, *args, **kwargs):
        ser = GetTaskResultSerializer(data=request.query_params)
        if ser.is_valid():
            result = get_task_result(**ser.validated_data)
            return Response(data=result)

        return Response(data=ser.errors)


class IndexView(TemplateView):
    template_name = 'index.html'
