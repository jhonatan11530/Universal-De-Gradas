import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductCuadradaComponent } from './product-cuadrada.component';

describe('ProductCuadradaComponent', () => {
  let component: ProductCuadradaComponent;
  let fixture: ComponentFixture<ProductCuadradaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ProductCuadradaComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ProductCuadradaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
