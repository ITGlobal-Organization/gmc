<section class="banner-sec-bg">
      <div class="banner-overlay"></div>
      <div class="container">
         <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
               <div class="banner-inner-content">
                  <h1>{!! trans('content.banner.heading') !!}</h1>
                  <h6>{!! trans('content.banner.subheading') !!}</h6>
                  <p>{!! trans('content.banner.description') !!}</p>
                  <div class="banner-btn">
                     <a href="{{ route('site-pages','contact-us') }}" class="btn btn-primary">{{ trans('lang.book_now')}}!</a>
                  </div>
               </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
               <div class="form-sec form">
               @include('contact-forms.formv2',[
         'heading' => "Get A Free Quote",
         'description' => "Protect your investment now by booking an appointment or requesting a free quote!",
         'form' => [
            'class' => 'contact-form-fields',
            'container_class' => 'field-con-flex',
            'fields' => [
               [
                  
                  'type'  => 'text',
                  'class' => 'field-inner-con form-field',
                  'name' => 'first_name',
                  'placeholder' =>  trans('messages.placeholder',['attribute' => trans('lang.name')]) 
               ],
               [
                  
                  'type'  => 'email',
                  'class' => 'field-inner-con form-field',
                  'name' => 'email',
                  'placeholder' => trans('messages.placeholder',['attribute' => trans('lang.email')]) 
               ],
               [
                  
                  'type'  => 'tel',
                  'class' => 'field-inner-con form-field',
                  'name' => 'phone',
                  'placeholder' => trans('messages.placeholder',['attribute' => trans('lang.phone')]) 
               ],
               [
                  
                  'type'  => 'text',
                  'class' => 'field-inner-con form-field',
                  'name' => 'subject',
                  'placeholder' => trans('messages.placeholder',['attribute' => trans('lang.vehicle-detail')]) 
               ],
               [
                  
                  'type'  => 'select',
                  'label' => trans('lang.service'),
                  'class' => 'field-inner-con form-field',
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
                  'class' => 'field-inner-con form-field',
                  'name' => 'message',
                  'placeholder' => trans('messages.placeholder',['attribute' => trans('lang.message')]) 
               ]
            ]
         ]
      ])
               </div>
            </div>
         </div>
      </div>
   </section>