import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductVentanasComponent } from './product-ventanas.component';

describe('ProductVentanasComponent', () => {
  let component: ProductVentanasComponent;
  let fixture: ComponentFixture<ProductVentanasComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ProductVentanasComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ProductVentanasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
