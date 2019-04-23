import { EmployeeService } from "../services/EmployeeService";

class EmployeeView {
  constructor() {
    this.content = document.getElementById("tbody");
    this.form = document.getElementById("form");
    this.service = new EmployeeService();
    this.data=[]
    this.openModal= document.getElementById('btn-add');
    this.formFields={
      name:  document.getElementById("first_name")
    }
    this.formFields2={
      name:  document.getElementById("last_name")
    }
    this.formFields3={
      name:  document.getElementById("email")
    }
    this.formFields4={
      name:  document.getElementById("password")
    }
    this.actionUpdate=false;
    this.id = ''
    this.idDelete = ''
    this.name = ''
    this.surname = ''
    this.mail = ''
    this.pass = ''
    document
      .getElementById("employee-view")
      .addEventListener("click", event => {
        const element=event.target
        if (element.matches("#btn-fetch")) {
          this.getEmployees();
        }
        if (element.matches("#btn-save")) {
          const data = new FormData(this.form);
          if(!this.actionUpdate){
            this.service.save(data);
            this.getEmployees();
          }else{
            const areglo = Array.from(data.entries()).map(arr => {
                return {[arr[0]]:arr[1]} 
            });     
            console.log( Object.assign({},...areglo))
            this.service.update( Object.assign({},...areglo),this.id)
          }    
        }

        if (element.matches(".btn-update")) {
          this.id =element.getAttribute('data-id')
          console.log(this.id )
          if(this.id ){
           const employee= this.data.find(obj=> obj.id==this.id )
           console.log(employee.apellido)
           this.formFields.name.value=employee.nombre
           this.formFields2.name.value=employee.apellido
           this.formFields3.name.value=employee.correo
           this.formFields4.name.value=employee.clave

           this.name=employee.nombre
           this.surname=employee.apellido
           this.mail=employee.correo
           this.pass=employee.clave

           this.openModal.click();
           this.actionUpdate=true;
         }
         
        }

        if (element.matches(".btn-delete")) {
           this.idDelete = element.getAttribute('data-id')
           this.service.delete( this.idDelete)
        }
      });
  }

  getEmployees() {
    this.service.getEmployees().then(res => {
      this.data=res;
      this.render(res);
    });
  }

  render(data) {
    this.content.innerHTML = "";
    for (const valor of data) {
      this.content.innerHTML += `
            <tr>
                <td scope="row">${valor.id}</td>
                <td>${valor.nombre}</td>
                <td>${valor.apellido}</td>
                <td>${valor.correo}</td>
                <td>${valor.clave}</td>
                <td>
                    <p>
                    <button class="btn teal darken-1 btn-update" data-id=${valor.id}><i class="material-icons btn-update" data-id=${valor.id}>create</i></button>
                     <button class="btn red darken-4 btn-delete modal-trigger" data-id=${valor.id} href="#modal2"><i class="material-icons btn-delete" data-id=${valor.id}>delete</i></button>
                    </p>
                </td>
             </tr>
            `;
    }
  }
}

new EmployeeView();
