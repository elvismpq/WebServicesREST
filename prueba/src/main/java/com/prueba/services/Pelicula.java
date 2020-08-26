/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.prueba.services;

import com.prueba.entidades.Peliculas;
import com.prueba.session.PeliculasFacade;
import java.util.List;
import javax.ejb.EJB;
import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;

/**
 *
 * @author Elvis
 */
@Path("Peliculas")
public class Pelicula {
     @EJB
    private PeliculasFacade peliculasFacade;
    
    @GET
    @Produces({MediaType.APPLICATION_JSON})
    public List<Peliculas>findAll(){
    return peliculasFacade.findAll();
    }
    //TRAER UN ID ESPECIFICO DE LA BASE DE DATOS
    @GET
    @Produces({MediaType.APPLICATION_JSON})
    @Path("{id}")
    public Peliculas findById(@PathParam("id") Integer id) {
        return peliculasFacade.find(id);
    }

    //BORRAR UN ID ESPECIFICO DE LA BASE DE DATOS
    @DELETE
    @Consumes({MediaType.APPLICATION_JSON})
    @Path("{id}")
    public void remove(@PathParam("id") Integer id) {
        peliculasFacade.remove(peliculasFacade.find(id));
        
    }

    //INSERTAR UN ELEMENTO EN LA BASE DE DATOS
    @POST
    @Consumes({MediaType.APPLICATION_JSON})
    public Response create(Peliculas peliculas) {
        peliculasFacade.create(peliculas);    
        return Response.ok("Dato ingresado",MediaType.APPLICATION_JSON).build();   
  
        
        
    }

    //ACTUALIZAR UN ID ESPECIFICO DE LA BASE DE DATOS
    // DEBER
    @PUT
    @Consumes({MediaType.APPLICATION_JSON})
    @Path("{id}")
    public void edit(@PathParam("id") Integer id, Peliculas peliculas) {
        peliculas.setId(id);
        peliculasFacade.edit(peliculas);
    }
}
