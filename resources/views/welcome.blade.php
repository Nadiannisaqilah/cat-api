<link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}">
<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<center><div class="row">
<nav>
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right hide-on-med-and-down" style="margin-right: 45%;">
        <li><a href="#" id="button" onclick="findKitten()">Get Kitten</a></li>
        <li><a href="#" id="button" onclick="findCat()">Get Cat</a></li>
      </ul>
    </div>
  </nav>
    <!-- <div class="col s12" style="margin-top: 1%;">
        <button class="waves-effect waves-light btn" id="button" onclick="findKitten()">get kitten!</button>
        <button class="waves-effect waves-light btn" id="button" onclick="findCat()">get cat!</button>
    </div> -->
    <div class="col s12" id="loader" style="display: none;">
        <div class="preloader-wrapper small active">
        <div class="spinner-layer spinner-green-only">
          <div class="circle-clipper left">
            <div class="circle"></div>
          </div><div class="gap-patch">
            <div class="circle"></div>
          </div><div class="circle-clipper right">
            <div class="circle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12" style="margin-top:5%;">
        <img id="kitten" style="max-width: 50%;">
    </div>
</div></center>

<script type="text/javascript">
        function findCat() {
        $("#loader").show();
        $.ajax({
            url: 'https://nijikokun-random-cats.p.mashape.com/random',
            type: 'GET',
            data: {},
            dataType: 'json',
            success: function(data) {
                // alert('success gis!');
                $("#kitten").attr('src', data.source);
            },
            error: function(err) { alert(err); },
            beforeSend: function(xhr) {
            xhr.setRequestHeader("X-Mashape-Authorization", "ctlhMHaQUumshU3wabI2OUvEf8owp1hEtT8jsnXnAjY0iYSzu8");
            },
            complete: function(data) {
                $("#loader").hide();
            }
        });
    }

    function findKitten() {
        $("#loader").show();
        $.ajax({
            url: 'https://nijikokun-random-cats.p.mashape.com/random/kitten',
            type: 'GET',
            data: {},
            dataType: 'json',
            success: function(data) {
                // alert('success gis!');
                $("#kitten").attr('src', data.source);
            },
            error: function(err) { alert(err); },
            beforeSend: function(xhr) {
            xhr.setRequestHeader("X-Mashape-Authorization", "ctlhMHaQUumshU3wabI2OUvEf8owp1hEtT8jsnXnAjY0iYSzu8");
            },
            complete: function(data) {
                $("#loader").hide();
            }
        });
    }
</script>