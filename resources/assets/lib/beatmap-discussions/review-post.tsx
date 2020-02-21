/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

import * as _ from 'lodash';
import * as React from 'react';
import * as ReactMarkdown from 'react-markdown';
import { ReviewPostEmbed } from './review-post-embed';
import { timestampTokenizer } from './timestamp-tokenizer';

interface Props {
  message: string;
}

export class ReviewPost extends React.Component<Props> {
  embed(id: number) {
    return (
      <div className='beatmap-discussion-review-post__block' key={osu.uuid()}>
        <ReviewPostEmbed data={{discussion_id: id}} />
      </div>
    );
  }

  paragraph(source: string) {
    return (
        <ReactMarkdown
          allowedTypes={[
            'emphasis',
            'link',
            'paragraph',
            'strong',
            'text',
          ]}
          plugins={[
            timestampTokenizer,
          ]}
          key={osu.uuid()}
          source={source}
          unwrapDisallowed={true}
          renderers={{
            link: (props) => <a className='beatmap-discussion-review-post__link' rel='nofollow' {...props}/>,
            paragraph: (props) => {
              return <div className='beatmap-discussion-review-post__block'>
                <div className='beatmapset-discussion-message' {...props}/>
              </div>;
            },
            timestamp: (props) => {
              return <a className='beatmapset-discussion-message__timestamp' {...props}/>;
            },
          }}
        />
    );
  }

  render() {
    const docBlocks: JSX.Element[] = [];

    try {
      const document = JSON.parse(this.props.message);

      _.each(document, (block) => {
        switch (block.type) {
          case 'paragraph':
            // '&nbsp;  ' converts into a newline
            docBlocks.push(this.paragraph(osu.presence(block.text) || '&nbsp;  '));
            break;
          case 'embed':
            docBlocks.push(this.embed(block.discussion_id));
            break;
        }
      });
    } catch (e) {
      docBlocks.push(<div>[error parsing review]</div>);
    }

    return (
      <div className='beatmap-discussion-review-post'>
        {docBlocks}
      </div>
    );
  }
}
