<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   
   <!-- Site Metas -->
   <title>Life Care</title>
   
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="shortcut icon" href="<?php echo url('/'); ?>/images/fevicon.ico1.png" type="image/x-icon" />
   <link rel="apple-touch-icon1" href="<?php echo url('/'); ?>/images/apple-touch-icon1.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?php echo url('/'); ?>/css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="<?php echo url('/'); ?>/style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="<?php echo url('/'); ?>/css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="<?php echo url('/'); ?>/css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="<?php echo url('/'); ?>/css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="<?php echo url('/'); ?>/css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="<?php echo url('/'); ?>/js/modernizer.js"></script>
   <!-- [if lt IE 9] -->


</head>
<body class="clinic_version" style="background-color: #333; color: #aaa; font-family: 'Josefin Sans';">

<header>
         @include('blade-scafolding.partials.header')
</header>
<!-- partial:index.partial.html -->
<div class="container" style="position: absolute;">
   @yield('content2')
</div>
<div class="calendar" style="margin-top: 130px; width: 350px; margin-right: 15%;">
  <div class="calendar__month">
    <div class="cal-month__previous"><</div>
    <div class="cal-month__current"></div>
    <div class="cal-month__next">></div>
  </div>
  <div class="calendar__head">
    <div class="cal-head__day"></div>
    <div class="cal-head__day"></div>
    <div class="cal-head__day"></div>
    <div class="cal-head__day"></div>
    <div class="cal-head__day"></div>
    <div class="cal-head__day"></div>
    <div class="cal-head__day"></div>
  </div>
  <div class="calendar__body">
    <div class="cal-body__week">
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
    </div>
    <div class="cal-body__week">
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
    </div>
    <div class="cal-body__week">
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
    </div>
    <div class="cal-body__week">
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
    </div>
    <div class="cal-body__week">
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
    </div>
    <div class="cal-body__week">
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
      <div class="cal-body__day"></div>
    </div>
  </div>
</div>
<!-- partial -->
<footer id="footer" class="footer-area wow fadeIn">
         @include('blade-scafolding.partials.footer')
      </footer>

      <div class="copyright-area wow fadeIn"  style="background:#C71585;">
         @include('blade-scafolding.partials.copyright')
      </div>
  <script src='https://momentjs.com/downloads/moment-with-locales.js'></script><script  src="./script.js"></script>

</body>
</html>


<script type="text/javascript">
   class Calendar {
  
  constructor () {
    this.monthDiv = document.querySelector('.cal-month__current')
    this.headDivs = document.querySelectorAll('.cal-head__day')
    this.bodyDivs = document.querySelectorAll('.cal-body__day')
    this.nextDiv = document.querySelector('.cal-month__next')
    this.prevDiv = document.querySelector('.cal-month__previous')
  }
  
  init () {
    moment.locale(window.navigator.userLanguage || window.navigator.language) 
    
    this.month = moment()
    this.today = this.selected = this.month.clone()
    this.weekDays = moment.weekdaysShort(true)
    
    this.headDivs.forEach((day, index) => {
      day.innerText = this.weekDays[index]
    })
    
    this.nextDiv.addEventListener('click', _ => { this.addMonth() })
    this.prevDiv.addEventListener('click', _ => { this.removeMonth() })
    
    this.bodyDivs.forEach(day => {
      day.addEventListener('click', e => {
        const date = +e.target.innerHTML < 10 ? `0${e.target.innerHTML}` : e.target.innerHTML

        if (e.target.classList.contains('cal-day__month--next')) {
          this.selected = moment(`${this.month.add(1, 'month').format('YYYY-MM')}-${date}`)
        } else if (e.target.classList.contains('cal-day__month--previous')) {
          this.selected = moment(`${this.month.subtract(1, 'month').format('YYYY-MM')}-${date}`)
        } else {
          this.selected = moment(`${this.month.format('YYYY-MM')}-${date}`)
        }

        this.update()
      })
    })
    
    this.update()
  }
  
  update () {
    this.calendarDays = {
      first: this.month.clone().startOf('month').startOf('week').date(),
      last: this.month.clone().endOf('month').date()
    }
    
    this.monthDays = {
      lastPrevious: this.month.clone().subtract(1,'months').endOf('month').date(),
      lastCurrent: this.month.clone().endOf('month').date()
    }
    
    this.monthString = this.month.clone().format('MMMM YYYY')
    
    this.draw()
  }
  
  addMonth () {
    this.month.add(1, 'month')
    
    this.update()
  }
  
  removeMonth () {
    this.month.subtract(1, 'month')
    
    this.update()
  }
  
  draw () {
    this.monthDiv.innerText = this.monthString
  
    let index = 0

    if (this.calendarDays.first > 1) {
      for (let day = this.calendarDays.first; day <= this.monthDays.lastPrevious; index ++) {
        this.bodyDivs[index].innerText = day++

        this.cleanCssClasses(false, index)

        this.bodyDivs[index].classList.add('cal-day__month--previous')
      } 
    }

    let isNextMonth = false
    for (let day = 1; index <= this.bodyDivs.length - 1; index ++) {
      if (day > this.monthDays.lastCurrent) {
        day = 1
        isNextMonth = true
      }

      this.cleanCssClasses(true, index)

      if (!isNextMonth) {
        if (day === this.today.date() && this.today.isSame(this.month, 'day')) {
          this.bodyDivs[index].classList.add('cal-day__day--today') 
        }

        if (day === this.selected.date() && this.selected.isSame(this.month, 'month')) {
          this.bodyDivs[index].classList.add('cal-day__day--selected') 
        }

        this.bodyDivs[index].classList.add('cal-day__month--current')
      } else {
        this.bodyDivs[index].classList.add('cal-day__month--next')
      }

      this.bodyDivs[index].innerText = day++
    }
  }
  
  cleanCssClasses (selected, index) {
    this.bodyDivs[index].classList.contains('cal-day__month--next') && 
      this.bodyDivs[index].classList.remove('cal-day__month--next')
    this.bodyDivs[index].classList.contains('cal-day__month--previous') && 
      this.bodyDivs[index].classList.remove('cal-day__month--previous')
    this.bodyDivs[index].classList.contains('cal-day__month--current') &&
      this.bodyDivs[index].classList.remove('cal-day__month--current')
    this.bodyDivs[index].classList.contains('cal-day__day--today') && 
      this.bodyDivs[index].classList.remove('cal-day__day--today')
    if (selected) {
      this.bodyDivs[index].classList.contains('cal-day__day--selected') && 
        this.bodyDivs[index].classList.remove('cal-day__day--selected') 
    }
  }
}

const cal = new Calendar()
cal.init()
</script>

<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script> 