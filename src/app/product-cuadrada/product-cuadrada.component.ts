import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-product-cuadrada',
  templateUrl: './product-cuadrada.component.html',
  styleUrls: ['./product-cuadrada.component.css']
})
export class ProductCuadradaComponent implements OnInit {
  public img:string ='assets/img/Cuadradas/1.jpg';
  public img1:string ='assets/img/Cuadradas/2.jpg';
  public img2:string ='assets/img/Cuadradas/3.jpg';

  public img3:string ='assets/img/Cuadradas/4.jpg';
  public img4:string ='assets/img/Cuadradas/5.jpg';
  public img5:string ='assets/img/Cuadradas/6.jpg';

  public img6:string ='assets/img/Cuadradas/7.jpg';
  public img7:string ='assets/img/Cuadradas/8.jpg';
  public img8:string ='assets/img/Cuadradas/9.jpg';

  constructor() { }

  ngOnInit(): void {
  }

}
