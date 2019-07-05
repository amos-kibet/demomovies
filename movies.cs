using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Movies
{
    #region Movies
    public class Movies
    {
        #region Member Variables
        protected int _movie_id;
        protected string _title;
        protected string _genre;
        protected int _quantity;
        protected unknown _price;
        protected string _cover;
        protected int _user_id;
        #endregion
        #region Constructors
        public Movies() { }
        public Movies(string title, string genre, int quantity, unknown price, string cover, int user_id)
        {
            this._title=title;
            this._genre=genre;
            this._quantity=quantity;
            this._price=price;
            this._cover=cover;
            this._user_id=user_id;
        }
        #endregion
        #region Public Properties
        public virtual int Movie_id
        {
            get {return _movie_id;}
            set {_movie_id=value;}
        }
        public virtual string Title
        {
            get {return _title;}
            set {_title=value;}
        }
        public virtual string Genre
        {
            get {return _genre;}
            set {_genre=value;}
        }
        public virtual int Quantity
        {
            get {return _quantity;}
            set {_quantity=value;}
        }
        public virtual unknown Price
        {
            get {return _price;}
            set {_price=value;}
        }
        public virtual string Cover
        {
            get {return _cover;}
            set {_cover=value;}
        }
        public virtual int User_id
        {
            get {return _user_id;}
            set {_user_id=value;}
        }
        #endregion
    }
    #endregion
}