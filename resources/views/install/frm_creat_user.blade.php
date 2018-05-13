<div class="container-fluid">
    @include("install.title")
    <div class="content-frm centered col-sm-6">
       {!! Form::open(['url' => $action_frm , 'name'=>'creat_user','id'=>'creat_user']) !!}
       		{!! Form::text('_token', csrf_token(), ['hidden'=> 'true']) !!}
	   		<div class="frm-item form-group">
       			{!! Form::label('', 'User Name', ['class' => 'item-label']) !!} <sup>*</sup>
       			@if($erros_data['username']!='')
       				<p class="show-erros">{{$erros_data['username']}}</p>
       			@endif
       			{!! Form::text('username',$data_frm['username'], ['class' => 'item-input form-control check_null','placeholder'=>'Input your Username','data'=>'validation']) !!}
       		</div>
       		<div class="frm-item form-group">
       			{!! Form::label('', 'Password', ['class' => 'item-label']) !!} <sup>*</sup>
       			@if($erros_data['password']!='')
       				<p class="show-erros">{{$erros_data['password']}}</p>
       			@endif
       			<input type="password" value="" name="password" class="item-input form-control check_null" id="password" data="validation">

       		</div>
       		<div class="frm-item form-group">
       			{!! Form::label('', 'Password again', ['class' => 'item-label']) !!} <sup>*</sup>
       			@if($erros_data['password_re']!='')
       				<p class="show-erros">{{$erros_data['password_re']}}</p>
       			@endif
       			<input type="password" value="" name="password_re" class="item-input form-control check_null" id="password_re" data="validation">
       		</div>
       		<div class="frm-item form-group">
       			{!! Form::label('', 'Email', ['class' => 'item-label']) !!} <sup>*</sup>
       			@if($erros_data['email']!='')
       				<p class="show-erros">{{$erros_data['email']}}</p>
       			@endif
       			{{ Form::text('email',$data_frm['email'], array('id'=>'email','class' => 'item-input form-control check_mail check_null', 'placeholder'=>'Input your email','data'=>'validation')) }}
       		</div>

       		<div class="frm-item center-item form-group">
       			{{ Form::button('Creat user',['class' => 'item-input btn btn-success','return'=>'false','id'=>'validation']) }}
       			{{ Form::reset('Reset',['class' => 'item-input btn btn-secondary']) }}
       		</div>
       {!! Form::close() !!}
    </div>
</div>