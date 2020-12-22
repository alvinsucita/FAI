@extends('user.layout')
@section('content')
    <!--script async
        src="https://pay.google.com/gp/p/js/pay.js"
        onload="onGooglePayLoaded()">
    </script-->
    <button id="pay-button">PAY</button>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            Hello,{{$user->username}}
            <small>Cart</small>
        </h1>
        </section>
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Your Cart</h3>
              </div>
              @if($cart=="")
              <div class="form-group">
                <label class="col-sm-12 control-label">Your shopping cart is empty</label>
              </div>
              ____________________________________________________________________________________________________________________________________
              @else
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    @for($i=1;$i<count($cart);$i++)
                        <tr>
                            <td><div class="col-md-12">
                                <div class="box box-success">
                                  <div class="box-header">
                                    <h3 class="box-title">{{$cart[$i]["nama"]}}</h3>

                                    <!--div class="box-tools pull-right">
                                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div-->
                                    <!-- /.box-tools -->
                                  </div>
                                  <!-- /.box-header -->
                                  <div class="box-body">
                                    <div class="col-sm-2">{{$cart[$i]["jenis"]}}</div>
                                    <div class="col-sm-3">Rp {{$cart[$i]["harga"]}},-</div>
                                    <div class="col-sm-7">x {{$cart[$i]["buy"]}}</div>
                                  </div>
                                  <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                              </div></td>
                        </tr>
                    @endfor
                </table>
              </div>
              <div class="box-footer">
                <div class="box-tools pull-right">
                    Total: {{$coun}}
                </div><br>
                <form class="form-horizontal" action="/user/buy_item" method="get">
                    @csrf
                    <button type="submit" class="btn btn-primary pull-right">Buy</button>
                </form>
              </div>
              @endif
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
    <!--script>
        function onGooglePayLoaded() {
            const googlePayClient = new google.payments.api.PaymentsClient({
                environment: 'TEST'
            });
        }
        const clientConfiguration = {
            apiVersion: 2,
            apiVersionMinor:0,
            allowedPaymentMethods : [cardPaymentMethod]
        };
        googlePayClient.isReadyToPay(clientConfiguration)
            .then(function(response) {
                if(response.result) {
                    // add a Google Pay button
                }
            }).catch(function(err){
                // log error in developer console
            });
        googlePayClient.createButton({
            // defaults to black if default or omitted
            buttonColor: 'default',
            // defaults to long if omitted
            buttonType:'long',
            onClick : onGooglePaymentsButtonClicked
        });
        const paymentDataRequest = Object.assign({},
            clientConfiguration);
        paymentDataRequest.transactionInfo = {
            totalPriceStatus:'FINAL',
            totalPrice:'123.45',
            currencyCode:'USD',
        };
        paymentDataRequest.merchantInfo = {
            merchantId: '0123456789 ',
            merchantName: 'Example Merchant'
        };
    </script-->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="000000"></script>
    <script type="text/javascript">
      document.getElementById('pay-button').onclick = function(){
        snap.pay(000000, {
          onSuccess: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          onPending: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          },
          onError: function(result){
            document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
          }
        });
      };
    </script>
@endsection
