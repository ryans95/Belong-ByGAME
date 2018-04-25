<?php 
session_start();
include('includes/config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <title>Belong ByGAME</title>
  <!--Bootstrap -->
  <link rel="stylesheet" href="seat.css">
  <link rel="stylesheet" href="jquery.seat-charts.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/style.css" type="text/css">
  <link href="assets/css/slick.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true"
  />
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="css/style.css" rel="stylesheet">
  <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/interface.js"></script>
  <script src="assets/switcher/js/switcher.js"></script>
  <script src="js/custom.js" type="text/javascript"></script>
  <script src="//code.jquery.com/jquery.min.js"></script>
  <script src="jquery.seat-charts.js"></script>

</head>

<body>
  <div id="page">

    <!--Header-->
    <?php include('includes/header.php');?>
    <!-- /Header -->

    <section class="image-head-wrapper" style="background-image: url('images/bookBanner.png');">
      <div class="inner-wrapper">
        <h1 style="color:#ffffff">Book Your Seat</h1>
      </div>
    </section>
    <div class="clearfix"></div>


    <section class="contact-block">
      <div class="container">
        <div class="col-md-6 contact-left-block">
          <h3>
            <span>
              <strong>Our </strong>
            </span>Prices</h3>
          <table id="price">
            <tr>
              <th>Activity</th>
              <th>Price</th>
            </tr>
            <tr>
              <td>1 Hour Pay to Play (Peak)</td>
              <td>£7</td>
            </tr>
            <tr>
              <td>1 Hour Pay to Play (Off Peak)</td>
              <td>£5</td>
            </tr>
            <tr>
              <td>Single VR Experience</td>
              <td>£2</td>
            </tr>
            <tr>
              <td>10 Minute VR Experience</td>
              <td>£5</td>
            </tr>
          </table>
        </div>
        <div class="col-md-6 contact-form">
          <h3>Book
            <span>
              <strong>Below</strong>
            </span>
          </h3>

          <div class="contact_form gray-bg">
            <form method="post">
              <div class="form-group">
                <label class="control-label">Select Date</label>
              </div>
              <div class="form-group">
                <label class="control-label">Select Time</label>
                <select class="form-control white_bg" id="selecttime" data-width="120px" style="color:black" required>
                  <option value="" selected disabled hidden>Select Time</option>
                  <option value="01">9AM-10AM</option>
                  <option value="02">11AM-12PM</option>
                  <option value="03">1PM-2PM</option>
                  <option value="04">1.30PM-2.30PM</option>
                  <option value="05">2PM-3PM</option>
                  <option value="06">4PM-5PM</option>
                  <option value="07">5.30PM-6.30PM</option>
                  <option value="08">7PM-8PM</option>
                  <option value="09">7.30PM-8.30PM</option>
                </select>
              </div>
              <div class="form-group">
                <div class="login_btn">
                  <a href="#seatform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Choose Seat
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                  </a>
                </div>
              </div>
            </form>
          </div>
          <div class="modal fade" id="seatform">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <h3 class="modal-title">Choose Your Seat</h3>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="login_wrap">
                      <div class="col-md-12 col-sm-6">
                        <div id="seat-map">
                          <div class="front-indicator">Front</div>
                        </div>
                        <div class="booking-details">
                          <h2>Booking Details</h2>
                          <h3> Selected Seats (
                            <span id="counter">0</span>):</h3>
                          <ul id="selected-seats">
                          </ul>
                          Total:
                          <b>£
                            <span id="total">0</span>
                          </b>
                          <div id="legend"></div>
                        </div>

                      </div>

                    </div>
                  </div>
                </div>
                <div class="modal-footer text-center">
                  <button onclick="myFunction()" data-dismiss="modal" class="btn btn-xs uppercase">Confirm Booking</button>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!--back to top-->
    <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
      <span>
        <i aria-hidden="true" class="fa fa-angle-up fa-lg"></i>
      </span>
      <span>Top</span>
    </a>
    <!--Footer -->
    <?php include('includes/footer.php');?>
    <!-- /Footer-->

    <!--Login-Form -->
    <?php include('includes/login.php');?>
    <!--/Login-Form -->

    <!--Register-Form -->
    <?php include('includes/registration.php');?>

    <!--/Register-Form -->

    <!--Forgot-password-Form -->
    <?php include('includes/forgotpassword.php');?>
    <!--/Forgot-password-Form -->

    <script>
      function myFunction() {
        confirm("Your Booking Has Been Confirmed!");
      }
    </script>

    <script>
      var firstSeatLabel = 1;

      $(document).ready(function () {
        var $cart = $('#selected-seats'),
          $counter = $('#counter'),
          $total = $('#total'),
          sc = $('#seat-map').seatCharts({
            map: [
              'ffffffffffff',

            ],
            seats: {
              f: {
                price: 7,
                classes: 'first-class', //your custom CSS class
                category: 'Pay to Play'
              }

            },
            naming: {
              top: false,
              getLabel: function (character, row, column) {
                return firstSeatLabel++;
              },
            },
            legend: {
              node: $('#legend'),
              items: [
                ['f', 'available', 'Available'],
                ['f', 'unavailable', 'Already Booked']
              ]
            },
            click: function () {
              if (this.status() == 'available') {
                $('<li>' + this.data().category + ' Seat # ' + this.settings.label + ': <b>£' + this.data().price +
                    '</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
                  .attr('id', 'cart-item-' + this.settings.id)
                  .data('seatId', this.settings.id)
                  .appendTo($cart);

                $counter.text(sc.find('selected').length + 1);
                $total.text(recalculateTotal(sc) + this.data().price);

                return 'selected';
              } else if (this.status() == 'selected') {
                //update the counter
                $counter.text(sc.find('selected').length - 1);
                //and total
                $total.text(recalculateTotal(sc) - this.data().price);

                //remove the item from the cart
                $('#cart-item-' + this.settings.id).remove();

                //seat has been vacated
                return 'available';
              } else if (this.status() == 'unavailable') {
                //seat has been already booked
                return 'unavailable';
              } else {
                return this.style();
              }
            }
          });

        //this will handle "[cancel]" link clicks
        $('#selected-seats').on('click', '.cancel-cart-item', function () {
          //trigger Click event on the appropriate seat
          sc.get($(this).parents('li:first').data('seatId')).click();
        });

        //some seats have already been booked
        sc.get(['1_2', '1_8', '1_9']).status('unavailable');

      });

      function recalculateTotal(sc) {
        var total = 0;

        //find every selected seat and sum its price
        sc.find('selected').each(function () {
          total += this.data().price;
        });

        return total;
      }
    </script>
</body>

</html>
