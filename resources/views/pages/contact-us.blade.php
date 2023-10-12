@extends('layouts.layoutv1')

@section('content')
@php $name = explode(' ',$Page->name); @endphp
@include('banners.bannerv4',[
   'heading' => count($name)>1? count($name)-2>0?"<span>". implode(" ",array_slice($name,count($name)-2))."</span>":"<span>".$name[0]."</span> ".$name[count($name)-1]:"<span>".$name[0]."</span>",
    'subheading' => $Page->description
  ])
<!-- CONTACT DETAIL SECTION BEGIN -->
<section class="contact-detail-sec">
      <div class="container">
         <div class="row contact-boxes">
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
               <div class="contact-detail-content">
                  <h6>{{ trans('lang.call_us') }}</h6>
                  <a href="tel:{{ config('site_config.contacts.phone')}}">{{ config('site_config.contacts.phone')}}</a>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
               <div class="contact-detail-content">
                  <h6>{{ trans('lang.email_us') }}</h6>
                  <a href="mailto:{{ config('site_config.contacts.email')}}">{{ config('site_config.contacts.email')}}</a>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-12 col-sm-6">
               <div class="contact-detail-content">
                  <h6>{{ trans('lang.follow_us') }}</h6>
                  <div class="social-icon-links">
                     <ul>
                        <li><a href="{{ config('site_config.contacts.instagram')}}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="{{ config('site_config.contacts.facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="row embed-map">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="google-map-embed">
                  <iframe src="{{ config('site_config.contacts.map')}}" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
            </div>
         </div>
      </div>
</section>
 <!-- CONTACT DETAIL SECTION END -->
<!-- CONTACT FORM SECTION BEGIN -->
   <section class="contact-form-sec form">
      @include('contact-forms.formv1',[
         'heading' => "<span>How Can We</span> Help You?",
         'description' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
         'form' => [
            'class' => 'contact-form-fields',
            'container_class' => 'row',
            'fields' => [
               [
                  
                  'type'  => 'text',
                  'grid' => 'col-lg-4 col-md-4 col-sm-4 col-12',
                  'class' => 'field-inner-con',
                  'field_class' => 'form-field',
                  'name' => 'first_name',
                  'placeholder' =>  trans('messages.placeholder',['attribute' => trans('lang.name')]) 
               ],
               [
                  
                  'type'  => 'email',
                  'class' => 'field-inner-con',
                  'grid' => 'col-lg-4 col-md-4 col-sm-4 col-12',
                  'field_class' => 'form-field',
                  'name' => 'email',
                  'placeholder' => trans('messages.placeholder',['attribute' => trans('lang.email')]) 
               ],
               [
                  
                  'type'  => 'tel',
                  'class' => 'field-inner-con',
                  'grid' => 'col-lg-4 col-md-4 col-sm-4 col-12',
                  'field_class' => 'form-field',
                  'name' => 'phone',
                  'placeholder' => trans('messages.placeholder',['attribute' => trans('lang.phone')]) 
               ],
               [
                  
                  'type'  => 'text',
                  'class' => 'field-inner-con',
                  'grid' => 'col-lg-6 col-md-6 col-sm-6 col-12',
                  'field_class' => 'form-field',
                  'name' => 'subject',
                  'placeholder' => trans('messages.placeholder',['attribute' => trans('lang.vehicle-detail')]) 
               ],
               [
                  
                  'type'  => 'select',
                  'label' => trans('lang.service'),
                  'grid' => 'col-lg-6 col-md-6 col-sm-6 col-12',
                  'class' => 'field-inner-con',
                  'field_class' => 'form-field',
                  'name' => 'services',
                  'options' => [
                     [
                        'value' => 'Polishing/Paint Correction',
                        'text' => 'Polishing/Paint Correction'
                     ],
                     [
                        'value' => 'Ceramic Coating Paint',
                        'text' => 'Ceramic Coating Paint'
                     ],
                     [
                        'value' => 'Glass Ceramic Coating',
                        'text' => 'Glass Ceramic Coating'
                     ],
                     [
                        'value' => 'Wheel Ceramic Coating',
                        'text' => 'Wheel Ceramic Coating'
                     ],
                     [
                        'value' => 'Interior Ceramic Coating',
                        'text' => 'Interior Ceramic Coating'
                     ],
                     [
                        'value' => 'Paint Protection Film',
                        'text' => 'Paint Protection Film'
                     ],
                  ],
                  'multiple' => true,
                  'placeholder' => trans('messages.placeholder',['attribute' => trans('lang.service')]) 
               ],
               [
                  
                  'type'  => 'textarea',
                  'class' => 'field-inner-con',
                  'grid' => 'col-lg-12 col-md-12 col-sm-12 col-12',
                  'field_class' => 'form-field',
                  'name' => 'message',
                  'placeholder' => trans('messages.placeholder',['attribute' => trans('lang.message')]) 
               ]
            ]
         ]
      ])
   </section>
   <!-- CONTACT FORM SECTION END -->
   @include('sections.newsletterv1')
@endsection