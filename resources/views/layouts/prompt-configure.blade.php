<style media="screen">

  .prompt-background{
    width:100%;
    height:100%;
    position: fixed;
    top:0;
    left: 0;
    background: rgba(256, 256, 256, 0.3);
    z-index: 100000;
    display: none;
  }

  .prompt-background .prompt-toggle{
    background: #984b43;
    border: none !important;
    color: white;
    position: absolute;
    top:  20px;
    left: 50%;
    margin-left: -3%;
  }

  .prompt{
    background: #233237;
    margin: 8% auto;
    width: 70%;
    padding: 100px 2%;
    padding-top: 50px;
    position: relative;
    height: 40%;
    color: white;
    overflow-y: scroll;
    border: 2px solid #eac67c;
  }
  .prompt > h1{
    margin-bottom: 60px;
  }

</style>

<script type="text/javascript">

  $('.prompt-toggle').click(function () {
    rel = $(this).attr('rel');
      $('.prompt-background[rel='+rel+']').toggle();
  });

</script>
