import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ProductGradasMetalicasComponent } from './product-gradas-metalicas.component';

describe('ProductGradasMetalicasComponent', () => {
  let component: ProductGradasMetalicasComponent;
  let fixture: ComponentFixture<ProductGradasMetalicasComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ProductGradasMetalicasComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ProductGradasMetalicasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
