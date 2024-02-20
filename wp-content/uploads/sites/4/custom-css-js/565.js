<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
 

var x1 = document.getElementById('child-box1');
        var x2 = document.getElementById('child-box2');
        var x3 = document.getElementById('child-box3');
        var y1 = document.getElementById('rodasvg1');
        var y2 = document.getElementById('rodasvg2');
        var y3 = document.getElementById('rodasvg3');

        function hienthibox1() {
          
          if (x1.style.height === '130px') {
              x1.style.height = '0';
          } else {
              x1.style.height = '130px';
          }         
          if (y1.style.transform === 'rotateZ(180deg)') {
            y1.style.transform = 'rotateZ(0)';
          } else {
            y1.style.transform = 'rotateZ(180deg)';
          }
        }
        function hienthibox2() {
            if (x2.style.height === '154px') {
              x2.style.height = '0';
          } else {
              x2.style.height = '154px';
          }
          if (y2.style.transform === 'rotateZ(180deg)') {
            y2.style.transform = 'rotateZ(0)';
          } else {
            y2.style.transform = 'rotateZ(180deg)';
          }
        }
        function hienthibox3() {
            if (x3.style.height === '140px') {
              x3.style.height = '0';
          } else {
              x3.style.height = '140px';
          }
          if (y3.style.transform === 'rotateZ(180deg)') {
            y3.style.transform = 'rotateZ(0)';
          } else {
            y3.style.transform = 'rotateZ(180deg)';
          }
        }

// các hiệu ứng zalo, contact
        const nut = document.querySelector('.zalo-vietlight');
        const nut2 = document.querySelector('.chevron');
        const tooltip = document.querySelector('.ellipis');
        const nutform = document.querySelector('.contact-vietlight');
        const nuttat = document.querySelector('.form-headeranhien i');

        nutform.addEventListener('click', function() {
        var formanhien = document.querySelector('.form-anhien')
        if (formanhien.style.transform === 'translateY(calc(100% + 190px))') {
            formanhien.style.transform = 'translateY(0)';
           } else {
            formanhien.style.transform = 'translateY(calc(100% + 190px))';
           }           
        })
        nuttat.addEventListener('click', function() {
        var formanhien = document.querySelector('.form-anhien')
        if (formanhien.style.transform === 'translateY(calc(100% + 190px))') {
            formanhien.style.transform = 'translateY(0)';
           } else {
            formanhien.style.transform = 'translateY(calc(100% + 190px))';
           }
        })
        nut.addEventListener('click', function() {
            var anhien = document.querySelector('.anhien')
            if (anhien.style.transform === 'scale(0)'){
                anhien.style.transform = 'scale(1)'
            } else {
                anhien.style.transform = 'scale(0)'
            }
        })
        nut2.addEventListener('click', function() {
        var anhien = document.querySelector('.anhien')
        anhien.style.transform = 'scale(0)'
        })

        tooltip.addEventListener('click', function() {
        var tooltipzalo = document.querySelector('.tooltip-zalo')
        if (tooltipzalo.style.display === 'none') {
            tooltipzalo.style.display = 'block';
           } else {
            tooltipzalo.style.display = 'none';
           }
        })
</script>
<!-- end Simple Custom CSS and JS -->
