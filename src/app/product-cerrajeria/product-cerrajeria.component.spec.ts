import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductCerrajeriaComponent } from './product-cerrajeria.component';

describe('ProductCerrajeriaComponent', () => {
  let component: ProductCerrajeriaComponent;
  let fixture: ComponentFixture<ProductCerrajeriaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ProductCerrajeriaComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ProductCerrajeriaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
