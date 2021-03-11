
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
      $('.materialboxed').materialbox();
      $('.slider').slider({ full_width: true });
      $('.fixed-action-btn').floatingActionButton({
        toolbarEnabled: true
      });
    });

  }
  constructor() {

  }

}
