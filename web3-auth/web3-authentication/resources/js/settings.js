
function MoWeb3divVisibility( divId, allMethodDivID ) {
	
	MoWeb3hideVisibility( allMethodDivID );
	div = document.getElementById( divId + "_div" );
	div.style.display = "block";
}

function MoWeb3hideVisibility ( allMethodDivID ) {
	var MethodsDivArray = allMethodDivID.split(",");
	MethodsDivArray.forEach(element => {
		div = document.getElementById( element + "_div" );
		if( div )
			div.style.display = "none";
	});
}

