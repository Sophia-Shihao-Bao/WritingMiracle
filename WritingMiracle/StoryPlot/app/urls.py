from django.urls import path

from . import views

app_name = 'api'


urlpatterns = [
    path('submit/', views.SubmitTaskAPIView.as_view(), name='submit'),
    path('result/', views.GetResultAPIView.as_view(), name='result')
]
