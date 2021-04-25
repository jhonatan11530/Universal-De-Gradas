import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductPuertasComponent } from './product-puertas.component';

describe('ProductPuertasComponent', () => {
  let component: ProductPuertasComponent;
  let fixture: ComponentFixture<ProductPuertasComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ProductPuertasComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ProductPuertasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
