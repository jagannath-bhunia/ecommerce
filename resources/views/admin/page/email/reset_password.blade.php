<!DOCTYPE html>
<html lang="en-US">
<body>
	<p>Hello {{$data["to_name"]}},</p>
	<p>
		<a href="{{$data['link']}}">
		Please click here to reset your password for brbck admin panel.
		</a>
	</p>
	<p>Thanks & Regards,</p>
	<p>{{$data["from_name"]}}</p>
</body>
</html>
