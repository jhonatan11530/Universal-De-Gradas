import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-catalogo-presentacion',
  templateUrl: './catalogo-presentacion.component.html',
  styleUrls: ['./catalogo-presentacion.component.css']
})
export class CatalogoPresentacionComponent implements OnInit {
  @Input() DataEntrante:any;
  constructor() { }

  ngOnInit(): void {
  }

}
