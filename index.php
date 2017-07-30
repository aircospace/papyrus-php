<html>
<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <style>
    
        .text-center {
            text-align:center;
        }
    </style>

    <script>
        $(function(){

            var dataresponse;

            $.ajax({
                url : "https://angelhack-sao-paulo.mybluemix.net/api/message",
                method : 'GET',
                dataType : 'json',
                success : function(response) {
                    console.log(response);

                    dataresponse = response;
                }
            }).done(function(data) {

                dataresponse = dataresponse.message;

                dataresponse.map(function(response) {

					var tbody = "<tr>"
							+ "<td>"
							+ field(response.id)
							+ "</td>"
							+ "<td>"
							+ field(response.user)
							+ "</td>"
							+ "<td>"
							+ field(response.message)
							+ "</td></tr>";

					$("#tbmessages > tbody").append(tbody);
				});
            });
        })
    
    </script>

</head>
<body>
    xxx

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3>Mensagens</h3>
                    </div>
                </div>
                <div class="panel panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <table class="table table-bordered table-horvered table-striped" id="tbmessages">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>user</th>
                                        <th>message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>


</body>
</html>