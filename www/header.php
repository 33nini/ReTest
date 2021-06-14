<div id="header">

<div class="blok1">
<meta charset="utf-8">
<link rel="stylesheet" href="./css/style.css">

      <table>
          <tr>
            <table align="center">
                <tr>
                    <td><img src="./img/лого1.png" width="450x" height="175px"></td>
                    <td>Программно-методический комплекс по дисциплине «Математические методы»</td>
                    <td><div class="container">
                        <div style="text-align: center;">
                          <a href="#openModal">Контакты</a>
                        </div>
                        <div id="openModal" class="modal">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title">Контакты преподавателя</h3>
                                <a href="#close" title="Close" class="close">×</a>
                              </div>
                              <div class="modal-body">
                                <img src="./img/Tilda_Icons_15re_man.svg" width="25px" height="25px">Киселева Алена Амазаровна
                                <br>
                                <a href="https://vk.com/id489030142"><img src="./img/Tilda_Icons_10cw_mac.svg" width="25px" height="25px"> VK</a>
                                <br>
                                <img src="./img/Tilda_Icons_3st_mail.svg" width="25px" height="25px">aaaa@mail.ru
                                <br>
                                <img src="./img/Tilda_Icons_2web_phone.svg" width="25px" height="25px">+7 (351) 240-04-40
                             
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <script>
                        document.addEventListener("DOMContentLoaded", function () {
                          var scrollbar = document.body.clientWidth - window.innerWidth + 'px';
                          console.log(scrollbar);
                          document.querySelector('[href="#openModal"]').addEventListener('click', function () {
                            document.body.style.overflow = 'hidden';
                            document.querySelector('#openModal').style.marginLeft = scrollbar;
                          });
                          document.querySelector('[href="#close"]').addEventListener('click', function () {
                            document.body.style.overflow = 'visible';
                            document.querySelector('#openModal').style.marginLeft = '0px';
                          });
                        });
                      </script></td>
                </tr>
            </table>
    </div>
</div>