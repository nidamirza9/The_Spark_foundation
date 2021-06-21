@extends('Layout')
@section('title','Transaction History')
@section('header')
    @parent
@endsection
@section('content')
    <script type="text/javascript">
        $(document).ready(function(){
            ViewTransactionHistory();
        });
        function ViewTransactionHistory()
        {
            $.ajax({
                url: 'GetTransactionHistoryData/',
                type: 'get',
                dataType: 'json',
                success: function(response){
                    var len=0;
                    $('#TransactionHistoryTable thead').empty();
                    $('#TransactionHistoryTable tbody').empty();
                    if(response['data']!=null)
                    {
                        len=response['data'].length;
                        if(len>0)
                        {
                            var count=1;
                            $('#TransactionHistoryTable thead').append("<tr><th>Sr No.</th><th>Sender</th><th>Receiver</th><th>Transaction Date</th><th>Transaction Amount</th></tr>");
                            $.each(response.data,function(i,v){
                                $('#TransactionHistoryTable tbody').append("<tr><td>"+count+"</td><td>"+v.Sender+"</td><td>"+v.Receiver+"</td><td>"+v.TransDate+"</td><td>"+v.TransAmount+"</td></tr>");
                                count++;
                            })
                        }
                        else
                        {
                            $('#TransactionHistoryTable tbody').append("<tr><th>No Transaction History Data Available...</th></tr>");
                        }
                    }
                },
                error: function(xhr)
                {
                    console.log(xhr.responseText);
                }
            });
        }
    </script>
    <table class="table table-hover" id="TransactionHistoryTable" name="TransactionHistoryTable">
        <thead></thead>
        <tbody></tbody>
    </table>
@endsection
@section('footer')
    @parent
@endsection