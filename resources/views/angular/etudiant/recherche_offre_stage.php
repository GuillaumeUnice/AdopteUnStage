<h2>Recherche des offres de stage</h2><br/><br/>

<div class="input-group left">
    <div class="input-group-addon"><span class="glyphicon glyphicon-education"></span></div>
    <select ng-init="fields = promotions[2]" class="form-control" ng-model="fields" ng-options="promotion.nom for promotion in promotions">
        <option value="">Aucun filtre</option>
    </select>
    <div class="input-group-addon"><span>Année de formation</span></div>
</div>

<div class="input-group right">
    <div class="input-group-addon"><span class="glyphicon glyphicon-education"></span></div>
    <select class="form-control" ng-model="fields_specialite">
        <option value="">Aucun filtre</option>
        <option ng-repeat="p in fields | customSpecialiteFilter " value="{{ p.id }}">
            {{p.nom}}
        </option>
    </select>
    <div class="input-group-addon"><span>Filière</span></div>
</div>
<br>

<div
    isteven-multi-select
    input-model="competences"
    output-model="competenceSelection"
    button-label="nom"
    item-label="nom"
    tick-property="ticked"
    >
</div>
<br>

<div class="historique__list">
    <div class="historique__list__item"
         dir-paginate="stage in stages
            | filter:{ promotion_id:  fields.id  }
            | filter:{specialite_id: fields_specialite}
            | customCompetenceFilter   : competenceSelection
            |itemsPerPage:10 ">

        <div class="historique__list__item__row">
            <div class="historique__list__item__content">

                <span class="historique__list__item__content__title">
                    {{ stage.title }}
                </span>

                <span class="historique__list__item__content__contact">

                    <span ng-if="stage.nom_contact">
                        {{ stage.nom_contact }}
                    </span>

                    <span ng-if="stage.email">
                        - Email : {{ stage.email }}
                    </span>

                    <span ng-if="stage.tel">
                        - Tel : {{ stage.tel }}
                    </span>
                    <span>
                        - Competences :
                        <span ng-repeat="comp in stage.competences">
                            {{ comp.nom }}
                        </span>
                    </span>
                </span>
            </div>
            <div class="historique__list__item__control">
                <div class="btn btn-form btn-blue-view">
                    <a href="etudiant/offre-stage/{{ stage.id}}">
                        <span class="glyphicon glyphicon-fullscreen"></span>
                        <span class="historique__list__item__control__name">Afficher</span>
                    </a>
                </div>
                <div class="btn btn-form btn-red-trash">
                    <a href="etudiant/postuler/{{ stage.id }}">
                        <span class="fa fa-rocket"></span>
                        <span class="historique__list__item__control__name">Postuler</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<dir-pagination-controls
    max-size="20"
    direction-links="true"
    boundary-links="true" >
</dir-pagination-controls>
