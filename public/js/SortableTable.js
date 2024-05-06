'use strict';

/**
 * This class helps to provide convenient sorting of the data in the table
 * by changing the URL parameters and updating the visual representation accordingly.
 */
class SortableTable {
    constructor() {
        this.sortFields = document.querySelectorAll('.sorting');
        this.searchField = document.querySelector('#table-search');
        this.perPage = document.querySelector('#per-page');
        this.status = document.querySelector('#filter-status');
        this.role = document.querySelector('#filter-role');
        this.urlParams = this.getUrlParams();

        this.initSortFields();
        this.initSearch();
        this.stateSortTable();
    }

    /**
     * Setting event handlers for sort fields on page load.
     */
    initSortFields() {
        this.sortFields.forEach(field => {
            field.addEventListener('click', evt => this.toggleSort(evt, field));
        });


        this.perPage.addEventListener('change', () => {
            this.urlParams.perPage = this.perPage.value;
            this.updateUrl()
        });

        this.status.addEventListener('change', () => {
            this.urlParams.status = this.status.value;
            this.updateUrl()
        });

        this.role.addEventListener('change', () => {
            this.urlParams.role = this.role.value;
            this.updateUrl()
        });
    }

    initSearch() {
        this.searchField.addEventListener('keyup', (evt) => {
            if (evt.key === 'Enter' || evt.keyCode === 13 || !this.searchField.value) {
                this.urlParams.keywords = this.searchField.value;

                this.updateUrl();
            }
        });
    }

    /**
     * Icon change function when clicking on a table column.
     *
     * @param evt
     * @param field
     */
    toggleSort(evt, field) {
        let dataSort = field.getAttribute('data-sort');

        this.updateUrlParams(dataSort);

        let newArrowClass = this.getArrowClassBasedOnType(this.urlParams.type);

        this.clearSortArrowsExcept();

        if (dataSort === this.urlParams.orderBy) {
            this.addedNewArrowClass(field, newArrowClass);
        }

        this.updateUrl();
    }

    /**
     * Displaying the visual state of the sort arrows based on URL parameters, when the page is loaded.
     *
     * @returns {boolean}
     */
    stateSortTable() {
        if (this.isEmptyParams()) {
            return false;
        }

        this.sortFields.forEach(field => {
            let dataSort = field.getAttribute('data-sort');

            let newArrowClass = this.getArrowClassBasedOnType(this.urlParams.type);

            this.clearSortArrowsExcept();

            if (dataSort === this.urlParams.orderBy) {
                this.addedNewArrowClass(field, newArrowClass);
            }
        });

        this.searchField.value = this.urlParams.keywords;

        if (this.urlParams.perPage) {
            this.perPage.value = this.urlParams.perPage;
        }

        if (this.urlParams.status) {
            this.status.value = this.urlParams.status;
        }

        if (this.urlParams.role) {
            this.role.value = this.urlParams.role;
        }
    }

    isEmptyParams() {
        for (const key in this.urlParams) {
            if (this.urlParams.hasOwnProperty(key) && this.urlParams[key] !== null && this.urlParams[key] !== undefined) {
                return false;
            }
        }

        return true;
    };

    clearSortArrowsExcept() {
        this.sortFields.forEach(elem => {
            let elemDataSort = elem.getAttribute('data-sort');

            if (elemDataSort !== this.urlParams.orderBy) {
                elem.classList.remove('sorting_desc', 'sorting_asc');
            }
        });
    }

    /**
     *
     * @param fontawesomeIcon
     * @param newArrowClass
     */
    addedNewArrowClass(fontawesomeIcon, newArrowClass) {
        fontawesomeIcon.classList.remove('sorting_asc', 'sorting_desc');
        fontawesomeIcon.classList.add(newArrowClass);
    }

    /**
     *
     * @param currentType
     * @returns {string}
     */
    getArrowClassBasedOnType(currentType) {
        return currentType === 'desc' ? 'sorting_asc' : 'sorting_desc';
    }

    /**
     * Processing the current URL, returning its parameters.
     *
     * @returns {{orderBy: string, type: string}}
     */
    getUrlParams() {
        let currentUrl = new URL(window.location.href);

        return {
            keywords: currentUrl.searchParams.get('keywords'),
            orderBy: currentUrl.searchParams.get('orderBy'),
            type: currentUrl.searchParams.get('type'),
            perPage: currentUrl.searchParams.get('perPage'),
            status: currentUrl.searchParams.get('status'),
            role: currentUrl.searchParams.get('role'),
        };
    }

    /**
     * Changing the URL to reflect the sorting changes.
     */
    updateUrl() {
        let currentUrl = new URL(window.location.href);

        if (this.urlParams.keywords) {
            currentUrl.searchParams.set('keywords', this.urlParams.keywords);
        } else {
            currentUrl.searchParams.delete('keywords');
        }

        if (this.urlParams.orderBy) {
            currentUrl.searchParams.set('orderBy', this.urlParams.orderBy);
        }

        if (this.urlParams.type) {
            currentUrl.searchParams.set('type', this.urlParams.type);
        }

        if (this.urlParams.perPage) {
            currentUrl.searchParams.set('perPage', this.urlParams.perPage);
        }

        if (this.urlParams.status) {
            currentUrl.searchParams.set('status', this.urlParams.status);
        } else {
            currentUrl.searchParams.delete('status');
        }

        if (this.urlParams.role) {
            currentUrl.searchParams.set('role', this.urlParams.role);
        } else {
            currentUrl.searchParams.delete('role');
        }

        window.location.href = currentUrl.toString();
    }

    /**
     * Change URL parameters.
     *
     * @param dataSort
     */
    updateUrlParams(dataSort) {
        if (this.urlParams.orderBy === dataSort) {
            this.urlParams.type = this.urlParams.type === 'asc' ? 'desc' : 'asc';
        } else {
            this.urlParams.orderBy = dataSort;
            this.urlParams.type = 'asc';
        }
    }
}
