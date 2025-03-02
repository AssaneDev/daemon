@extends('frontend.main_master')
@section('main')
   
 
@include('frontend.body.header')





<!-- Hero Section    S T A R T -->
@include('frontend.body.sections.section1')

<!-- Brand Slider Section    S T A R T -->
@include('frontend.body.sections.section2')

<!-- Service Section    S T A R T -->
@include('frontend.body.sections.section3')

<!-- About Section    S T A R T -->
@include('frontend.body.sections.section4')

<!-- Work Process Section   S T A R T -->
@include('frontend.body.sections.section5')

<!-- Project Section    S T A R T -->
@include('frontend.body.sections.section6')
<!-- Video Section    S T A R T -->
@include('frontend.body.sections.section7')




<!-- Cta Section   S T A R T -->
@include('frontend.body.sections.section8')
<!-- Testimonial Section   S T A R T -->
@include('frontend.body.sections.section9')



<!-- Cta Section   S T A R T -->
@include('frontend.body.sections.section10')

<!-- Section  footer -->
@include('frontend.body.footer')



@endsection()