import { Component, OnInit } from '@angular/core';
@Component({
  selector: 'app-product-gradas20',
  templateUrl: './product-gradas20.component.html',
  styleUrls: ['./product-gradas20.component.css']
})
export class ProductGradas20Component implements OnInit {
  public habilidad: Array<any> = [];
  constructor() { }

  ngOnInit(): void {

    this.habilidad = [
      {
        img: 'assets/img/Tapada/2.jpg'
      },
      {
        img: 'assets/img/Tapada/2.jpg'
      },
      {
        img: 'assets/img/Tapada/2.jpg'
      },
      {
        img: 'assets/img/Tapada/2.jpg'
      },
      {
        img: 'assets/img/Tapada/2.jpg'
      },
      {
        img: 'assets/img/Tapada/2.jpg'
      },
      {
        img: 'assets/img/Tapada/2.jpg'
      },
      {
        img: 'assets/img/Tapada/2.jpg'
      }

    ]
  }

}
