import { Component, Input, OnInit } from '@angular/core';
declare var $:any;
@Component({
  selector: 'app-card-catalogo',
  templateUrl: './card-catalogo.component.html',
  styleUrls: ['./card-catalogo.component.css']
})
export class CardCatalogoComponent implements OnInit {
  @Input() DataEntrante:any;
  constructor() { 

  }

  ngOnInit() {
  }

}
