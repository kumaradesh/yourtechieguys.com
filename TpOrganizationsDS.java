package com.peoplestrong.api.auth;

import javax.ejb.Stateless;
import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import javax.persistence.Query;

@Stateless
public class TpOrganizationsDS {

    @PersistenceContext(unitName = "TalentPactAuth")
    private EntityManager entityManager;

    public String checkCountryCodeForDirectoryEnabled(Long organizationId) {
        StringBuilder queryBuilder = new StringBuilder();
        queryBuilder.append("select countryCodeForDirectoryEnabled ");
        queryBuilder.append("from TpOrganization where organizationID=:organizationId");
        Query query = entityManager.createQuery(queryBuilder.toString());
        query.setParameter("organizationId", organizationId);
        return query.getResultList().get(0)==null ? "0":query.getResultList().get(0).toString();
    }

}