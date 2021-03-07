
import { Component, OnInit } from '@angular/core';
declare var $: any;
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {
  ngOnInit() {
    $(document).ready(function () {
      $('.sidenav').sidenav();
      $('.slider').slider({ full_width: true });
      $('.fixed-action-btn').floatingActionButton({
        toolbarEnabled: true
      });
      $("#down").click(function () {
        $('html, body').animate({
          scrollTop: $("#habilidades").offset().top
        }, 1500);
      });
    });

  }
  constructor() {

  }

}
