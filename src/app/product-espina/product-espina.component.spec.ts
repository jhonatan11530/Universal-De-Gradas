import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductEspinaComponent } from './product-espina.component';

describe('ProductEspinaComponent', () => {
  let component: ProductEspinaComponent;
  let fixture: ComponentFixture<ProductEspinaComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ProductEspinaComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ProductEspinaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
