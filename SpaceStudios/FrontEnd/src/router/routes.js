import {useAuth} from '@/stores/auth.js';

export default async function routes(to, from, next){
    if(to.meta?.auth){
        const auth = useAuth();
        if(auth.token && auth.user){
    
          const isAuthenticated = await auth.checkToken(auth.token);
    
          if(isAuthenticated){
            if(to.meta?.admin){
              if(auth.isAdmin){
                next();
              }
              
              next({name: 'home'});
            }else{
              next();
            }
          }else{
            next({name: 'home'});
          }
        }else{
          next({name: 'login'});
        }
        console.log(to.name);
    }else{
        next();
    }
}