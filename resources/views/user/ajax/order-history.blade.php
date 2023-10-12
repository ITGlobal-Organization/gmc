@if(count($Orders["data"]) > 0)
<table>
   <tr>
      <th>{{ trans('lang.order_no') }}</th>
      <th>{{ trans('lang.order_date') }}</th>
      <th>{{ trans('lang.patch-type') }}</th>
      <th>{{ trans('lang.status') }}</th>
      <th>{{ trans('lang.payment') }}</th>
      <th>{{ trans('lang.download') }}</th>
   </tr>
   @foreach($Orders["data"] as $Order)
   <tr>
      <td class="list1">{{ $Order["order_code"] }}</td>
      <td class="list2">{{ $Order["order_date"] }}</td>
      <td class="list2">{{ $Order["product"] }}</td>
      <td class="list2">{{ $Order["status"] }}</td>
      <td class="list2">Paid</td>
      <td class=" list3"><span class="btn-download"><a href="#">{{ trans('lang.sample')}} {{ trans('lang.download')}}</a></span></td>
   </tr>
   @endforeach
</table>
<div class="row justify-content-center">

</div>
@else
<div class="row justify-content-center">
    {{ trans('lang.no_record_found')}}
</div>
@endif
