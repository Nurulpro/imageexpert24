@extends('errors.layout')

@section('title', 'Too Many Requests')
@section('icon', 'bx-error')
@section('code', '429')
@section('message', "You've made too many requests in a short time. Please wait a moment and try again.")
