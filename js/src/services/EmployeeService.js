import {Connection} from '../config/Connection'
import { API, GET, POST } from '../config/ConfigApi';

export class EmployeeService {
    constructor(){
        this.url = `${API}employee.php`;
    }
    
    async getEmployees(){
      const response= await  new Connection(this.url, GET).execute();
      if(response.hasOwnProperty('res')){
          return response.res;
      }else{
          return response;
      }
    }

   async save(body){
        const response= await  new Connection(this.url, POST).setData(body).execute();
        if(response.hasOwnProperty('res')){
            return response.res;
        }else{
            return response;
        }
    }

    update(id, body){

    }

    delete(id){
        
    }
}