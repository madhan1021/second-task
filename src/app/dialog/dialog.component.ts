import {Component, OnInit, Inject} from '@angular/core';
import {Validators, FormBuilder, FormControl} from "@angular/forms";
import {FormGroup} from "@angular/forms";
import {MatDialogRef} from "@angular/material/dialog";
import { MAT_DIALOG_DATA } from '@angular/material/dialog';
import {ServerDataService} from "../server-data.service";

@Component({
  selector: 'app-dialog',
  templateUrl: './dialog.component.html',
  styleUrls: ['./dialog.component.css']
})
export class DialogComponent implements OnInit {
  lform: FormGroup;
  result:any;

  constructor(
    private fb:FormBuilder,
    private dialog: MatDialogRef<DialogComponent>,
    private dataservice: ServerDataService,
   @Inject(MAT_DIALOG_DATA) public data: any
  ) { }

  ngOnInit() {
    console.log(this.data);
    this.initialForm();
  }

  initialForm() {
    this.lform = this.fb.group({
      ThalukName: new FormControl('', [Validators.required,Validators.maxLength(50)]),
      ThalukCode: new FormControl('', Validators.required)
    })
  }

  onCancel() {
    this.dialog.close();
  }

  onDone() {
    this.dataservice.thal_name(this.lform.value).subscribe(res2 =>{
      this.result=res2;
      if(this.result.message == "done"){
        this.dialog.close(this.result.message);
      }
    })
  }
}

