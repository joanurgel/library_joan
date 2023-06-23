<div id="datatable">

$j.ajax({
    url:"https://jsonplaceholder.typicode.com/users",
    method:"GET",
    success:function(data) {
        console.log (data);
        let text = '';
        $.each(data, function(key, value) {
            var text = '<p>Name: ' + data[key].name + '</p>';
            text += '<p>Email: ' + data[key].email + '</p>';
            $('#datatable').append(text);

        });
    }
},
error:function(error){
    console.log(error);
}
)

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>