
/*
 * Run all inline javascript in a element
 * @param _id of element
 * 
 */
function _newNode(_sTag,_oParent)
{
    _oNode = document.createElement(_sTag);
    _oParent.appendChild(_oNode);
    return _oNode;
}
function run_script_in_element(_id)
{
	var _element = document.getElementById(_id);
	if(_element!=null)
	{
		var _scriptTags = _element.getElementsByTagName("script");
		var _inline_scripts = "";
		var _a = _scriptTags.length;
		for (var i = 0; i < _a; i++) 
		{
			if (_scriptTags[i].src!="")
			{
				var _new_script = _newNode("script",_element);
				_new_script.type="text/javascript";
				_new_script.src = _scriptTags[i].src;
			}
			else
			{
				_inline_scripts += _scriptTags[i].text;
			}
		}
		
		if(_inline_scripts!="")
		{
			var _new_script = _newNode("script",_element);
			_new_script.text = _inline_scripts;
		}		
	}
}
