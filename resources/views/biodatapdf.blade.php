@extends('layouts.app-print')
@section('content')
<style type="text/css">
    .table tr td { vertical-align:top; }
    .border_top td { border-top:solid 1px #333333;border-collapse:collapse; }
    .border_bottom td { border-bottom:solid 1px #333333; }
    .title { font-weight:bold;font-size:13px; }
    .picture { max-width:150px; }
    .tr_intro td label { width: 150px; font-weight: bold; display: inline-block; }
</style>
<div class="container">
    <center><h2>Bio Data</h2></center>
</div>
<table cellpadding="10" cellspacing="0" width="100%" border="0" class="table">
    <tr class="border_bottom">
        <td align="left" class="title" colspan="2" >Personal Detail</td>
    </tr>
    <tr class="tr_intro">
        <td align="left" style="vertical-align:top;">
            <label>Name</label><span>: </span> {{ @$biodata->first_name.' '.@$biodata->last_name }}<br />
            <label>Date of Birth</label><span>: </span> {{ @$biodata->dob }}<br />
            <label>Height</label><span>: </span> {{ @$biodata->height }}<br />
            <label>Weight</label><span>: </span> {{ @$biodata->weight }}<br />
            <label>Occupation</label><span>: </span> {{ @$biodata->occupation }}
        </td>
        <td style="padding:10px;" align="right">
            <img class="picture" src="{{ @$passport_photo_url }}" />
        </td>
    </tr>

    <tr class="border_bottom">
        <td align="left" class="title" colspan="2">Family Detail</td>
    </tr>
    
    <tr class="tr_intro">
        <td colspan="2">
            @if(!empty(@$biodata->father_name))
            <label>Father</label><span>:</span> {{ @$biodata->father_name}} <br />
                @if(!empty(@$biodata->father_occupation))
                <label>Father Occupation</label><span>:</span> {{ @$biodata->father_occupation }}<br />
                @endif
            @endif
            @if(!empty(@$biodata->mother_name))
            <label>Mother Name</label><span>:</span> {{ @$biodata->mother_name }}<br />
                @if(!empty(@$biodata->mother_occupation))
                <label>Mother Occupation</label><span>:</span> {{ @$biodata->mother_occupation }}<br />
                @endif
            @endif
            @if(!empty(@$biodata->siblings))
            <label>Siblings</label><span>:</span> {{ @$biodata->siblings }}
            @endif
        </td>
    </tr>
    
    <tr class="border_bottom">
        <td align="left" class="title" colspan="2">Education Detail</td>
    </tr>
    <tr>
        <td align="left" colspan="2">{!! @$biodata->education !!}</td>
    </tr>
    
    <tr class="border_bottom">
        <td align="left" class="title" colspan="2">Contact Detail</td>
    </tr>
    <tr class="tr_intro">
        <td colspan="2">
            @if(!empty(@$biodata->mob_no))
            <label>Mobile No.</label><span>:</span> {{ @$biodata->mob_no}} <br />
            @endif
            @if(!empty(@$biodata->tel_no))
            <label>Telephone No.</label><span>:</span> {{ @$biodata->tel_no }}<br />
            @endif
            @if(!empty(@$biodata->email_address))
            <label>Email</label><span>:</span> {{ @$biodata->email_address }}
            @endif
        </td>
    </tr>
    
    <tr class="border_bottom">
        <td align="left" class="title" colspan="2">Residential Address</td>
    </tr>
    <tr>
        <td colspan="2">{!! @$biodata->address !!}</td>
    </tr>

</table>
@endsection
