<form class="contact-form">
<div class="contact-success"></div>
                <div class="contact-error"></div>
                     <h4>{!! $heading !!}</h4>
                     <p>{!! $description !!}</p>
                     @foreach($form['fields'] as $field)
                        @if($field['type'] == 'textarea')
                            <textarea cols="5" rows="5"  class="form-control {{ $field['class'] }}" name="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] }}"></textarea>
                            <div class="error-{{ $field['name'] }} errors"></div>
                        @elseif($field['type'] == 'select')
                            @if($field['multiple'] == true)
                            <label>
                            
                                <input mbsc-input id="services-select-input" class="form-control {{ $field['class'] }}" placeholder="Select {{ $field['label'] }}" data-dropdown="true" name="{{ $field['name'] }}" data-input-style="outline" data-label-style="stacked" data-tags="true" />
                            </label>
                            <select id="services-select" class="form-control" name="{{ $field['name'] }}" multiple>
                                <option Value="">Select {{ $field['label'] }}</option>
                                @foreach($field['options'] as $option)
                                    <option Value="{{ $option['value'] }}">{{ $option['text'] }}</option>
                                @endforeach
                            </select>
                            @else
                            <select id="services-select" class="form-control" name="{{ $field['name'] }}">
                                <option Value="">Select {{ $field['label'] }}</option>
                                @foreach($field['options'] as $option)
                                    <option Value="{{ $option['value'] }}">{{ $option['text'] }}</option>
                                @endforeach
                            </select>
                            @endif
                        @else
                            <input type="{{ $field['type'] }}" name="{{ $field['name'] }}" placeholder="{{ $field['placeholder'] }}" class="form-control {{ $field['class'] }}">
                            <div class="error-{{ $field['name'] }} errors"></div>
                        @endif
                     
                     @endforeach
                     <button type="submit" class="btn btn-primary">{{ trans('lang.submit') }}</button>
</form>