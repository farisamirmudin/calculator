$(document).ready(function() {
    $("button").addClass("btn btn-light");
    $(".yellow").removeClass("btn-light").addClass("btn-warning");
    $("button").click(function(){
        switch (this.innerHTML) {
            case 'AC':
                $(document.getElementById("result").innerHTML = 0);
                break;
            case '+/-':
                $current = document.getElementById('result').innerHTML;
    if($current > 0)
        document.getElementById('result').innerHTML = -$current;
    else if ($current < 0)
        document.getElementById('result').innerHTML = -$current;
    else
        document.getElementById('result').innerHTML = 0;
        break;
        case '%':
            document.getElementById('result').innerHTML =
        document.getElementById('result').innerHTML / 100;
        break;
        case '=':
            document.getElementById('result').innerHTML =
      eval(document.getElementById('result').innerHTML);
      break;
      default:
          $current = document.getElementById('result').innerHTML;
        if($current == '0')
          document.getElementById('result').innerHTML = this.innerHTML;
      else
        document.getElementById('result').innerHTML += this.innerHTML;
        }
        
      });
  });