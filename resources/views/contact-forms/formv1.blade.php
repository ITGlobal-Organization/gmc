<div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="contact-form-content">
                  <h2>{!! $heading !!}</h2>
                  <p>{!! $heading !!}</p>
               </div>
               <div class="{{ $form['class'] }}">
                    @php 
                    $count = 1;
                    @endphp
                  <form class="contact-form">
                  <div class="contact-success"></div>
                <div class="contact-error"></div>
                  <div class="{{ $form['container_class'] }}">
                    @foreach($form['fields'] as $field)
                    @if($field['type'] == 'textarea')
                    <div class="{{ $field['grid']}}">
                        <div class="{{ $field['class'] }}">
                           <textarea cols="8" rows="8" class="form-control {{ $field['field_class'] }}" name="{{ $field['name'] }}" placeholder="{{ trans('messages.contact_placeholder_msg')}}"></textarea>
                           <div class="error-{{ $field['name'] }} errors"></div>
                        </div>
                     </div>
                     @elseif($field['type'] == 'select')
                     <div class="{{ $field['grid']}}">
                            @if($field['multiple'] == true)
                            <div class="{{ $field['class'] }}">
                            <label>
                            
                                <input mbsc-input id="services-select-input" class="form-control {{ $field['field_class'] }}" placeholder="Select {{ $field['label'] }}" data-dropdown="true" name="{{ $field['name'] }}" data-input-style="outline" data-label-style="stacked" data-tags="true" />
                            </label>
                            <select id="services-select" class="form-control" name="{{ $field['name'] }}" multiple>
                                <option Value="">Select {{ $field['label'] }}</option>
                                @foreach($field['options'] as $option)
                                    <option Value="{{ $option['value'] }}">{{ $option['text'] }}</option>
                                @endforeach
                            </select>
                           </div>
                            @else
                            <select id="services-select" class="form-control" name="{{ $field['name'] }}">
                                <option Value="">Select {{ $field['label'] }}</option>
                                @foreach($field['options'] as $option)
                                    <option Value="{{ $option['value'] }}">{{ $option['text'] }}</option>
                                @endforeach
                            </select>
                            @endif
                           </div>
                            
                     @else
                     <div class="{{ $field['grid']}}"> 
                        <div class="{{ $field['class'] }}">
                           <input type="{{ $field['type'] }}" placeholder="{{ $field['placeholder'] }}" name="{{ $field['name'] }}" class="form-control {{ $field['field_class'] }}">
                           <div class="error-{{ $field['name'] }} errors"></div>
                        </div>
                     </div>
                      
                     @endif
                  
                     
                        @if($count%3==0 ) 
                            </div>
                            <div class="{{ $form['container_class'] }}">   
                        @endif
                        @php $count +=1; @endphp
                     @endforeach
                     </div>
                     <div class="con-submit-btn">
                        <button type="submit" class="btn btn-primary">{{ trans('lang.submit')}}</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>