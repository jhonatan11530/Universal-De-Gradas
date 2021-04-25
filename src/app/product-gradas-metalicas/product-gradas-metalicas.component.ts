import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-product-gradas-metalicas',
  templateUrl: './product-gradas-metalicas.component.html',
  styleUrls: ['./product-gradas-metalicas.component.css']
})
export class ProductGradasMetalicasComponent implements OnInit {
  public img:string ='assets/img/Grada_metalica/1.jpg';
  public img1:string ='assets/img/Grada_metalica/2.jpg';
  public img2:string ='assets/img/Grada_metalica/3.jpg';

  public img3:string ='assets/img/Grada_metalica/4.jpg';

  constructor() { }

  ngOnInit(): void {
  }

}
