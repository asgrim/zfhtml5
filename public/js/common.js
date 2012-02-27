function addOnLoad(fn, args)
{
	var current_onload = window.onload;

	if (typeof(current_onload) != "function")
	{
		window.onload = fn;
	}
	else
	{
		window.onload = function() {
			if (current_onload) current_onload();
			fn();
		};
	}
}